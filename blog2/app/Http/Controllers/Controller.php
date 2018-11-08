<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
//use Illuminate\Contracts\Validation\Validator;
use Illuminate\Contracts\Validation\Factory;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

use phpDocumentor\Reflection\Types\Null_;

use Symfony\Component\Filesystem\Exception\IOException;
use function Symfony\Component\VarDumper\Tests\Caster\reflectionParameterFixture;
//use Zend\InputFilter\Input;
use Illuminate\Support\Facades\Input;

use Illuminate\Contracts\Auth\Guard;

use App\Repositories\ImageRepository;
use Carbon\Carbon;
use File;
use Storage;
use DateTime;
use App\User;
use App\Girl;
use App\Services;
use App\DemoMail;
use App\Region;
use App\City;
use App\Country;
use Mail;
use settype;
use App\Mail\Reminder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTest(Request $requests){

        return 200;
    }
}
