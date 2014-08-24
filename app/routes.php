<?php

// Provide controller methods with object instead of ID
Route::model('tasks', 'Task');Route::model('projects', 'Project');
// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
    return Task::whereSlug($value)-&gt;first();
});
Route::bind('projects', function($value, $route) {
    return Project::whereSlug($value)-&gt;first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

