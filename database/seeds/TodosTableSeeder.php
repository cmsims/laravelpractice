<?php

/**
 * Created by PhpStorm.
 * User: mitchsims
 * Date: 2/6/17
 * Time: 3:53 PM
 */
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('todos')->delete();

        $todos = array(
            ['id' => 1, 'name' => 'Todo 1', 'slug' => 'todo-1', 'project_id' => 1, 'completed' => false, 'description' => 'My first todo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Todo 2', 'slug' => 'todo-2', 'project_id' => 1, 'completed' => false, 'description' => 'My first todo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Todo 3', 'slug' => 'todo-3', 'project_id' => 1, 'completed' => false, 'description' => 'My first todo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Todo 4', 'slug' => 'todo-4', 'project_id' => 1, 'completed' => true, 'description' => 'My second todo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Todo 5', 'slug' => 'todo-5', 'project_id' => 1, 'completed' => true, 'description' => 'My third todo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Todo 6', 'slug' => 'todo-6', 'project_id' => 2, 'completed' => true, 'description' => 'My fourth todo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Todo 7', 'slug' => 'todo-7', 'project_id' => 2, 'completed' => false, 'description' => 'My fifth todo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('todos')->insert($todos);
    }

}