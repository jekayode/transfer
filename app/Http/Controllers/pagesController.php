<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Wallet;
use Illuminate\Support\Facades\Auth;
use App\Beneficiary;
use App\User;
use App\Restriction;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RestrictionController as Restrict;
use App\Http\Utilities\Wallet as UtilWallet;

class pagesController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __contruct()
    {
        $this->middleware('auth')->except('signin');
    }

    public function home()
    {
        return view('home-page');
    }

    public function signin(Request $request)
    {
        $data['ref'] = str_replace('http://', '', str_replace('https://', '', URL::previous()));
        $data['host'] = str_replace('http://', '', str_replace('https://', '', $request->server('HTTP_HOST')));

        return $this->showLoginForm(); // Does the same thing as above
    // return view ('sign-in');
    }

    public function userdashboard()
    {
        $wallet = Wallet::all();
        $transaction = \App\Http\Utilities\Wallet::all();
        // $permission = Restriction::where('uuid',Auth::user()->id)->get();
        
        return view('dashboard', compact('wallet', 'transaction'));
    }

    public function about()
    {
        return view('about');
    }

    public function forgot()
    {
        return view('forgot');
    }

    public function signout()
    {
        return view('signin');
    }


    public function success()
    {
        return view('success');
    }

    public function failed($response)
    {
        return view('failed', compact('response'));
    }

    public function balance()
    {
        return view('balance');
    }

    public function transfer()
    {
        return view('transfer');
    }

    public function bank_transfer(Wallet $wallet)
    {
        $permit = Restriction::where('wallet_id', $wallet->id)
          ->where('uuid', Auth::user()->id)
          ->first();
        if($permit == null) return back()->with('error', 'You do not have the permission to transfer to bank');;
        $restrict = new Restrict($permit);

        if(count($restrict->canTransferFromWallet()) != 0) return redirect('/dashboard');

        if(count($restrict->canTransferFromWallet()) != 0) return back()->with('error', 'You do not have the permission to transfer to bank');;

        return view('transfer-to-bank', compact('wallet'));
    }

    public function wallet_transfer()
    {
        $wallets = Wallet::all();
        $user_id = Auth::user()->id;
        return view('transfer-to-wallet', compact('wallets'))->with('user_id', $user_id);
    }

    public function viewAccounts()
    {
        return view('view-accounts');
    }

    public function otp()
    {
        return view('otp');
    }

    public function walletdetail(Wallet $wallet)
    {
        $permit = Restriction::where('wallet_id', $wallet->id)
          ->where('uuid', Auth::user()->id)
          ->first();
        if($permit == null) return redirect('/dashboard')->with('error', 'You do not have access to this wallet');
        
        $beneficiaries = Beneficiary::where('wallet_id', $wallet->id)->paginate(15);
         
        return view('view-wallet', compact('wallet','permit','rules','beneficiaries'));
    }

    public function createWallet()
    {
        return view('create-wallet');
    }

    public function createBeneficiary()
    {
        return view('create-beneficiary');
    }

    public function addBeneficiary(Wallet $wallet)
    {
        $permit = Restriction::where('wallet_id', $wallet->id)
          ->where('uuid', Auth::user()->id)
          ->first();
        if($permit == null) return back()->with('error', 'You do not have the permission to add beneficiary');
        $restrict = new Restrict($permit);
        if(count($restrict->canAddBeneficiary()) > 0) return back()->with('error', 'You do not have the permission to add beneficiary');
        return view('createbeneficiary', compact('wallet'));
    }

    public function insertBeneficiary(Wallet $wallet)
    {    
          
        $permit = Restriction::where('wallet_id', $wallet->id)
          ->where('uuid', Auth::user()->id)
          ->first();
        if($permit == null) return redirect('/dashboard')->with('error', 'You do not have the permission to add beneficiary');
        $restrict = new Restrict($permit);
        if(count($restrict->canAddBeneficiary()) > 0) return redirect('/dashboard')->with('error', 'You do not have the permission to add beneficiary');

        $beneficiary = new Beneficiary;
        $beneficiary->name = request('name');
        $beneficiary->account_number = request('account_number'); //->account_number;
        $bank_detail = explode('||', request('bank_id'));
        $beneficiary->wallet_id = $wallet->id;
        $beneficiary->bank_id = $bank_detail[0];
        $beneficiary->bank_name = $bank_detail[1];
        $beneficiary->uuid = Auth::user()->id;
        if ($beneficiary->save()) {
            return redirect("wallet/$wallet->id")->with('success', 'Beneficiary added');
        } else {
            return redirect()->back()->with('error', 'Beneficiary could not be added');
        }
    }


    public function pagenotfound()
    {
        return view('404');
    }


    //all other page functions can be added

    public function mainWallet()
    {
        return view('to-main-wallet');
    }
}
