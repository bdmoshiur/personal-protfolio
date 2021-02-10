<?php
use Illuminate\Support\Facades\Route;

//Frontend Route

        Route::get('/login', 'Frontend\FrontendController@login')->name('login');


        Route::get('/', 'Frontend\FrontendController@index')->name('index');

        Route::get('/about', 'Frontend\FrontendController@about')->name('about');
        Route::get('/services', 'Frontend\FrontendController@service')->name('services');
        Route::get('/contact', 'Frontend\FrontendController@contact')->name('contact');
        Route::get('/blog', 'Frontend\FrontendController@blog')->name('blog');
        Route::get('/blog-details', 'Frontend\FrontendController@blogDetails')->name('blog_details');
        Route::get('/protfolio', 'Frontend\FrontendController@protfolio')->name('protfolio');
        Route::get('/elements', 'Frontend\FrontendController@elements')->name('elements');



//Backend Route
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware' => 'auth'], function () {
        // Abouts Route
        Route::prefix('abouts')->group(function () {
            Route::get('/view', 'Backend\AboutController@view')->name('abouts.view');
            Route::get('/add', 'Backend\AboutController@add')->name('abouts.add');
            Route::post('/store', 'Backend\AboutController@store')->name('abouts.store');
            Route::get('/edit/{id}', 'Backend\AboutController@edit')->name('abouts.edit');
            Route::post('/update/{id}', 'Backend\AboutController@update')->name('abouts.update');
            Route::get('/delete/{id}', 'Backend\AboutController@delete')->name('abouts.delete');

            });


            // Abouts skill Route
        Route::prefix('skills')->group(function () {
            Route::get('/view', 'Backend\SkillController@view')->name('skills.view');
            Route::get('/add', 'Backend\SkillController@add')->name('skills.add');
            Route::post('/store', 'Backend\SkillController@store')->name('skills.store');
            Route::get('/edit/{id}', 'Backend\SkillController@edit')->name('skills.edit');
            Route::post('/update/{id}', 'Backend\SkillController@update')->name('skills.update');
            Route::get('/delete/{id}', 'Backend\SkillController@delete')->name('skills.delete');

            });

                 // Abouts skill Route
        Route::prefix('frontends')->group(function () {
            Route::get('/view', 'Backend\FrontendController@view')->name('frontends.view');
            Route::get('/add', 'Backend\FrontendController@add')->name('frontends.add');
            Route::post('/store', 'Backend\FrontendController@store')->name('frontends.store');
            Route::get('/edit/{id}', 'Backend\FrontendController@edit')->name('frontends.edit');
            Route::post('/update/{id}', 'Backend\FrontendController@update')->name('frontends.update');
            Route::get('/delete/{id}', 'Backend\FrontendController@delete')->name('frontends.delete');

            });

                 // Abouts skill Route
        Route::prefix('backends')->group(function () {
            Route::get('/view', 'Backend\BackendController@view')->name('backends.view');
            Route::get('/add', 'Backend\BackendController@add')->name('backends.add');
            Route::post('/store', 'Backend\BackendController@store')->name('backends.store');
            Route::get('/edit/{id}', 'Backend\BackendController@edit')->name('backends.edit');
            Route::post('/update/{id}', 'Backend\BackendController@update')->name('backends.update');
            Route::get('/delete/{id}', 'Backend\BackendController@delete')->name('backends.delete');

            });
                 // Abouts skill Route
        Route::prefix('others')->group(function () {
            Route::get('/view', 'Backend\OtherController@view')->name('others.view');
            Route::get('/add', 'Backend\OtherController@add')->name('others.add');
            Route::post('/store', 'Backend\OtherController@store')->name('others.store');
            Route::get('/edit/{id}', 'Backend\OtherController@edit')->name('others.edit');
            Route::post('/update/{id}', 'Backend\OtherController@update')->name('others.update');
            Route::get('/delete/{id}', 'Backend\OtherController@delete')->name('others.delete');

            });

         // Abouts skill Route
        Route::prefix('services')->group(function () {
            Route::get('/view', 'Backend\ServiceController@view')->name('services.view');
            Route::get('/add', 'Backend\ServiceController@add')->name('services.add');
            Route::post('/store', 'Backend\ServiceController@store')->name('services.store');
            Route::get('/edit/{id}', 'Backend\ServiceController@edit')->name('services.edit');
            Route::post('/update/{id}', 'Backend\ServiceController@update')->name('services.update');
            Route::get('/delete/{id}', 'Backend\ServiceController@delete')->name('services.delete');

            });

               // Abouts skill Route
        Route::prefix('servicesElements')->group(function () {
            Route::get('/view', 'Backend\ServiceElementController@view')->name('servicesElements.view');
            Route::get('/add', 'Backend\ServiceElementController@add')->name('servicesElements.add');
            Route::post('/store', 'Backend\ServiceElementController@store')->name('servicesElements.store');
            Route::get('/edit/{id}', 'Backend\ServiceElementController@edit')->name('servicesElements.edit');
            Route::post('/update/{id}', 'Backend\ServiceElementController@update')->name('servicesElements.update');
            Route::get('/delete/{id}', 'Backend\ServiceElementController@delete')->name('servicesElements.delete');

            });

            // Abouts skill Route
        Route::prefix('experiences')->group(function () {
            Route::get('/view', 'Backend\ExperienceController@view')->name('experiences.view');
            Route::get('/add', 'Backend\ExperienceController@add')->name('experiences.add');
            Route::post('/store', 'Backend\ExperienceController@store')->name('experiences.store');
            Route::get('/edit/{id}', 'Backend\ExperienceController@edit')->name('experiences.edit');
            Route::post('/update/{id}', 'Backend\ExperienceController@update')->name('experiences.update');
            Route::get('/delete/{id}', 'Backend\ExperienceController@delete')->name('experiences.delete');

            });

               // Abouts skill Route
        Route::prefix('educations')->group(function () {
            Route::get('/view', 'Backend\EducationController@view')->name('educations.view');
            Route::get('/add', 'Backend\EducationController@add')->name('educations.add');
            Route::post('/store', 'Backend\EducationController@store')->name('educations.store');
            Route::get('/edit/{id}', 'Backend\EducationController@edit')->name('educations.edit');
            Route::post('/update/{id}', 'Backend\EducationController@update')->name('educations.update');
            Route::get('/delete/{id}', 'Backend\EducationController@delete')->name('educations.delete');

            });




});

