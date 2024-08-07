namespace App\Http\Requests; 
use Illuminate\Foundation\Http\FormRequest; 

	class ProfileRequest extends FormRequest { 
			
				public function authorize() { return true; } 
				
				public function rules() { 
				return [ 'nom' => 'required|string|max:255', 'prenom' => 'required|string|max:255', 'image' => 'required|file|mimes:jpg,png', 'statut' => 'required|in:inactif,en attente,actif', ]; } } 