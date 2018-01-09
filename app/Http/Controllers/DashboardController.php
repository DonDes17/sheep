<?php

namespace App\Http\Controllers;

use App\Spending;
use App\TraitSpending;
use App\User;
use App\Part;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    use TraitSpending;

    public function index()
    {

        $lastSpendings = Spending::orderBy('created_at', 'DESC')->take(3)->get();
        $totalSpending = $this->totalSpending();
        $totalSpendingByUser = $this->totalSpendingByUser();

        return view('back.dashboard', compact('lastSpendings','totalSpending','totalSpendingByUser')) ;

    }


    public function balance()
    {

    $users = User::paginate(env('APP_PAGINATE'));
    $totalSpending = $this->totalSpending();
    $sumPart = Part::sum('day');
    $pricePart = round($totalSpending / $sumPart, 2);

    return view('back.part.index', compact('users', 'pricePart', 'totalSpending'));

    }

}
