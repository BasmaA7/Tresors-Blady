<?php



namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\ManageUsers\ManageUserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $manageUserRepository;

    public function __construct(ManageUserRepositoryInterface $manageUserRepository)
    {
        $this->manageUserRepository = $manageUserRepository;
    }

    public function index()
    {
        $categories = Category::all(); 
        $users = $this->manageUserRepository->paginate(5);
        return view('Admin.ManageUsers.index', compact('users','categories'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
      
    }

    public function edit($id)
    {
       
    }


    public function show($id){

    }
    public function update(Request $request, $id)
    {
      
   
    }

    public function destroy($id)
    {
        $this->manageUserRepository->delete($id);
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

