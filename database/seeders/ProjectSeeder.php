<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectList = [
            [
                "nome" => "laravel-auth",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-auth",
            ],
            [
                "nome" => "laravel-auth-template",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-auth-template",
            ],
            [
                "nome" => "laravel-base-crud",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-base-crud",
            ],
            [
                "nome" => "laravel-migration-seeder",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-migration-seeder",
            ],
            [
                "nome" => "laravel-model-controller",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-model-controller",
            ],
            [
                "nome" => "laravel-comics",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-comics",
            ],
            [
                "nome" => "laravel-10-layout-template",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-10-layout-template",
            ],
            [
                "nome" => "laravel-primi-passi",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/laravel-primi-passi",
            ],
            [
                "nome" => "db-university",
                "linguaggio_utilizzato" => "SQL",
                "url_repo" => "https://github.com/AlesciDavide/db-university",
            ],
            [
                "nome" => "db-first",
                "linguaggio_utilizzato" => "SQL",
                "url_repo" => "https://github.com/AlesciDavide/db-first",
            ],
            [
                "nome" => "php-oop-2",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/php-oop-2",
            ],
            [
                "nome" => "php-snacks-b1",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/php-snacks-b1",
            ],
            [
                "nome" => "php-oop-1",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/php-oop-1",
            ],
            [
                "nome" => "php-todo-list-json",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/php-todo-list-json",
            ],
            [
                "nome" => "php-strong-password-generator",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/php-strong-password-generator",
            ],
            [
                "nome" => "php-hotel",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/php-hotel",
            ],
            [
                "nome" => "php-badwords",
                "linguaggio_utilizzato" => "PHP",
                "url_repo" => "https://github.com/AlesciDavide/php-badwords",
            ],
            [
                "nome" => "proj-html-vuejs",
                "linguaggio_utilizzato" => "Vue",
                "url_repo" => "https://github.com/AlesciDavide/proj-html-vuejs",
            ],
            [
                "nome" => "vite-boolflix",
                "linguaggio_utilizzato" => "Vue",
                "url_repo" => "https://github.com/AlesciDavide/vite-boolflix",
            ],
            [
                "nome" => "vite-yu-gi-oh",
                "linguaggio_utilizzato" => "Vue",
                "url_repo" => "https://github.com/AlesciDavide/vite-yu-gi-oh",
            ],
            [
                "nome" => "vite-comics",
                "linguaggio_utilizzato" => "Vue",
                "url_repo" => "https://github.com/AlesciDavide/vite-comics",
            ],
            [
                "nome" => "vite-hello-world",
                "linguaggio_utilizzato" => "Vue",
                "url_repo" => "https://github.com/AlesciDavide/vite-hello-world",
            ],
            [
                "nome" => "vue-email-list",
                "linguaggio_utilizzato" => "JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/vue-email-list",
            ],
            [
                "nome" => "vue-boolzapp",
                "linguaggio_utilizzato" => " JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/vue-boolzapp",
            ],
            [
                "nome" => "vue-slider",
                "linguaggio_utilizzato" => "JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/vue-slider",
            ],
            [
                "nome" => "vue-todolist",
                "linguaggio_utilizzato" => "HTML CSS JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/vue-todolist",
            ],
            [
                "nome" => "vue-hello",
                "linguaggio_utilizzato" => "HTML CSS JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/vue-hello",
            ],
            [
                "nome" => "js-snack-es6",
                "linguaggio_utilizzato" => "HTML CSS JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/js-snack-es6",
            ],
            [
                "nome" => "js-jsnacks-blocco-3",
                "linguaggio_utilizzato" => "HTML CSS JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/js-jsnacks-blocco-3",
            ],
            [
                "nome" => "js-our-team",
                "linguaggio_utilizzato" => "HTML CSS JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/js-our-team",
            ],
            [
                "nome" => "js-simon",
                "linguaggio_utilizzato" => "HTML CSS JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/js-simon",
            ],

        ];

        foreach ($projectList as $singleProject) {
            $newProject = new Project();
            $newProject->nome = $singleProject["nome"];
            $newProject->linguaggio_utilizzato = $singleProject["linguaggio_utilizzato"];
            $newProject->url_repo = $singleProject["url_repo"];
            $newProject->save();
        }
    }
}
