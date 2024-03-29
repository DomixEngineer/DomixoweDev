<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    // Dla wszystkich
    // Pobieranie wszystkich umiejętności
    public function getSkills()
    {
        $skills = Skill::all();
        return $skills;
    }

    // Dla wszystkich
    // Pobieranie umiejętności na podstawie danej kategorii
    public function getSkillsByCategory($category)
    {
        $skills = Skill::where('category', $category)->get();
        return $skills;
    }

    // Tylko admin
    // Dodawanie umiejętności
    public function addSkill()
    {

    }

    // Tylko admin
    // Usuwanie danej umiejętności
    public function deleteSkill()
    {

    }

    // Tylko admin
    // Aktualizacja danej umiejętności
    public function updateSkill()
    {

    }
}
