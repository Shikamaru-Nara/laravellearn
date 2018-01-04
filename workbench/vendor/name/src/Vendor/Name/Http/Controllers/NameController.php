<?php namespace Vendor\Name\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vendor\Name\Facades\Name;
use Vendor\Name\Models\NameModel;

/**
 * The NameController class.
 *
 * @package Vendor\Name
 * @author  Dendi Sunandar <dendisunandar@gmail.com>
 */
class NameController extends Controller
{
    public function demo()
    {
        return Name::welcome();
    }
}
