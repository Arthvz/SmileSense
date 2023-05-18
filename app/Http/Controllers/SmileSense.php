namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SmileSense extends Controller
{
    public function show(string $id)
    {
        $Smile = Smile::find($id);
        return view('smile.show')->with('name', $Smile);
    }



}