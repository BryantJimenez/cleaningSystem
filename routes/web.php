<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/////////////////////////////////////// AUTH ////////////////////////////////////////////////////

Auth::routes(['register' => false]);
Route::get('/registro/email', 'UserController@emailVerify');
Route::post('/entrar', 'AuthController@login')->name('login.custom');
Route::post('/registro', 'AuthController@register')->name('register.custom');
Route::post('/recuperar', 'AuthController@recovery')->name('recovery.custom');
Route::post('/salir', 'AuthController@logout')->name('logout.custom');
Route::post('/recuperar', 'AuthController@recovery')->name('recovery.custom');
Route::post('/restaurar', 'AuthController@reset')->name('reset.custom');

Route::group(['middleware' => ['session_verify']], function () {
	Route::get('/restaurar/{slug}', 'AuthController@resetForm')->name('restaurar');
	
	// //////////////////////////////// WEB ///////////////////////////////////
	Route::get('/', 'WebController@index')->name('home');
	Route::get('/registrar', 'WebController@create')->name('register');
	Route::get('/viviendas', 'WebController@households')->name('households');
	Route::get('/servicios', 'WebController@services')->name('services');
	Route::get('/aviso-legal', 'WebController@legal')->name('legal');
	Route::get('/vivienda-', 'WebController@more')->name('more');
	Route::get('/carrito', 'WebController@shoppingCart')->name('cart');
	Route::get('/compra', 'WebController@purchase')->name('purchase');
	Route::get('/alquiler', 'WebController@rental')->name('rental');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
	///// ////////////////////ADMIN ///////////////////////////

	// Inicio
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::get('/admin/perfil', 'AdminController@profile')->name('profile');
	Route::get('/admin/perfil/editar', 'AdminController@profileEdit')->name('profile.edit');
	Route::put('/admin/perfil/', 'AdminController@profileUpdate')->name('profile.update');
});

Route::group(['middleware' => ['auth', 'superadmin']], function () {
	// Administradores
	Route::get('/admin/administradores', 'AdministratorController@index')->name('administradores.index');
	Route::get('/admin/administradores/registrar', 'AdministratorController@create')->name('administradores.create');
	Route::post('/admin/administradores', 'AdministratorController@store')->name('administradores.store');
	Route::get('/admin/administradores/{slug}', 'AdministratorController@show')->name('administradores.show');
	Route::get('/admin/administradores/{slug}/editar', 'AdministratorController@edit')->name('administradores.edit');
	Route::put('/admin/administradores/{slug}', 'AdministratorController@update')->name('administradores.update');
	Route::put('/admin/administradores/{slug}/activar', 'AdministratorController@activate')->name('administradores.activate');
	Route::put('/admin/administradores/{slug}/desactivar', 'AdministratorController@deactivate')->name('administradores.deactivate');

	//Bancos
	Route::get('/admin/bancos', 'BankController@index')->name('bancos.index');
	Route::get('/admin/bancos/registrar', 'BankController@create')->name('bancos.create');
	Route::post('/admin/bancos', 'BankController@store')->name('bancos.store');
	Route::get('/admin/bancos/{slug}', 'BankController@show')->name('bancos.show');
	Route::get('/admin/bancos/{slug}/editar', 'BankController@edit')->name('bancos.edit');
	Route::put('/admin/bancos/{slug}', 'BankController@update')->name('bancos.update');
	Route::put('/admin/bancos/{slug}/activar', 'BankController@activate')->name('bancos.activate');
	Route::put('/admin/bancos/{slug}/desactivar', 'BankController@deactivate')->name('bancos.deactivate');

	//Empresas
	Route::get('/admin/empresas', 'BusinessController@index')->name('empresas.index');
	Route::get('/admin/empresas/registrar', 'BusinessController@create')->name('empresas.create');
	Route::post('/admin/empresas', 'BusinessController@store')->name('empresas.store');
	Route::get('/admin/empresas/{slug}', 'BusinessController@show')->name('empresas.show');
	Route::get('/admin/empresas/{slug}/editar', 'BusinessController@edit')->name('empresas.edit');
	Route::put('/admin/empresas/{slug}', 'BusinessController@update')->name('empresas.update');
	Route::put('/admin/empresas/{slug}/activar', 'BusinessController@activate')->name('empresas.activate');
	Route::put('/admin/empresas/{slug}/desactivar', 'BusinessController@deactivate')->name('empresas.deactivate');

	//Categorias
	Route::get('/admin/categorias', 'CategoryController@index')->name('categorias.index');
	Route::get('/admin/categorias/registrar', 'CategoryController@create')->name('categorias.create');
	Route::post('/admin/categorias', 'CategoryController@store')->name('categorias.store');
	Route::get('/admin/categorias/{slug}', 'CategoryController@show')->name('categorias.show');
	Route::get('/admin/categorias/{slug}/editar', 'CategoryController@edit')->name('categorias.edit');
	Route::put('/admin/categorias/{slug}', 'CategoryController@update')->name('categorias.update');
	Route::put('/admin/categorias/{slug}/activar', 'CategoryController@activate')->name('categorias.activate');
	Route::put('/admin/categorias/{slug}/desactivar', 'CategoryController@deactivate')->name('categorias.deactivate');

	//Poblaciones
	Route::get('/admin/ciudades', 'CityController@index')->name('ciudades.index');
	Route::get('/admin/ciudades/registrar', 'CityController@create')->name('ciudades.create');
	Route::post('/admin/ciudades', 'CityController@store')->name('ciudades.store');
	Route::get('/admin/ciudades/{slug}', 'CityController@show')->name('ciudades.show');
	Route::get('/admin/ciudades/{slug}/editar', 'CityController@edit')->name('ciudades.edit');
	Route::put('/admin/ciudades/{slug}', 'CityController@update')->name('ciudades.update');
	Route::put('/admin/ciudades/{slug}/activar', 'CityController@activate')->name('ciudades.activate');
	Route::put('/admin/ciudades/{slug}/desactivar', 'CityController@deactivate')->name('ciudades.deactivate');

	//Compañias
	Route::get('/admin/companias', 'CompanyController@index')->name('companias.index');
	Route::get('/admin/companias/registrar', 'CompanyController@create')->name('companias.create');
	Route::post('/admin/companias', 'CompanyController@store')->name('companias.store');
	Route::get('/admin/companias/{slug}', 'CompanyController@show')->name('companias.show');
	Route::get('/admin/companias/{slug}/editar', 'CompanyController@edit')->name('companias.edit');
	Route::put('/admin/companias/{slug}', 'CompanyController@update')->name('companias.update');
	Route::put('/admin/companias/{slug}/activar', 'CompanyController@activate')->name('companias.activate');
	Route::put('/admin/companias/{slug}/desactivar', 'CompanyController@deactivate')->name('companias.deactivate');

	//Contatos

	Route::get('/admin/contratos', 'ContractController@index')->name('contratos.index');
	Route::get('/admin/contratos/registrar', 'ContractController@create')->name('contratos.create');
	Route::post('/admin/contratos', 'ContractController@store')->name('contratos.store');
	Route::get('/admin/contratos/{slug}', 'ContractController@show')->name('contratos.show');
	Route::get('/admin/contratos/{slug}/editar', 'ContractController@edit')->name('contratos.edit');
	Route::put('/admin/contratos/{slug}', 'ContractController@update')->name('contratos.update');
	Route::put('/admin/contratos/{slug}/activar', 'ContractController@activate')->name('contratos.activate');
	Route::put('/admin/contratos/{slug}/desactivar', 'ContractController@deactivate')->name('contratos.deactivate');

	//Empleados
	Route::get('/admin/empleados', 'EmployeeController@index')->name('empleados.index');
	Route::get('/admin/empleados/registrar', 'EmployeeController@create')->name('empleados.create');
	Route::post('/admin/empleados', 'EmployeeController@store')->name('empleados.store');
	Route::get('/admin/empleados/{slug}', 'EmployeeController@show')->name('empleados.show');
	Route::get('/admin/empleados/{slug}/editar', 'EmployeeController@edit')->name('empleados.edit');
	Route::put('/admin/empleados/{slug}', 'EmployeeController@update')->name('empleados.update');
	Route::put('/admin/empleados/{slug}/activar', 'EmployeeController@activate')->name('empleados.activate');
	Route::put('/admin/empleados/{slug}/desactivar', 'EmployeeController@deactivate')->name('empleados.deactivate');

	//Viviendas
	Route::get('/admin/viviendas', 'HouseholdController@index')->name('viviendas.index');
	Route::get('/admin/viviendas/registrar', 'HouseholdController@create')->name('viviendas.create');
	Route::post('/admin/viviendas', 'HouseholdController@store')->name('viviendas.store');
	Route::get('/admin/viviendas/{slug}', 'HouseholdController@show')->name('viviendas.show');
	Route::get('/admin/viviendas/{slug}/editar', 'HouseholdController@edit')->name('viviendas.edit');
	Route::put('/admin/viviendas/{slug}', 'HouseholdController@update')->name('viviendas.update');
	Route::put('/admin/viviendas/{slug}/activar', 'HouseholdController@activate')->name('viviendas.activate');
	Route::put('/admin/viviendas/{slug}/desactivar', 'HouseholdController@deactivate')->name('viviendas.deactivate');

	//Opiniones
	Route::get('/admin/opiniones', 'OpinionController@index')->name('opiniones.index');
	Route::get('/admin/opiniones/registrar', 'OpinionController@create')->name('opiniones.create');
	Route::post('/admin/opiniones', 'OpinionController@store')->name('opiniones.store');
	Route::get('/admin/opiniones/{slug}', 'OpinionController@show')->name('opiniones.show');
	Route::get('/admin/opiniones/{slug}/editar', 'OpinionController@edit')->name('opiniones.edit');
	Route::put('/admin/opiniones/{slug}', 'OpinionController@update')->name('opiniones.update');
	Route::put('/admin/opiniones/{slug}/activar', 'OpinionController@activate')->name('opiniones.activate');
	Route::put('/admin/opiniones/{slug}/desactivar', 'OpinionController@deactivate')->name('opiniones.deactivate');

	//Pagos
	Route::get('/admin/pagos', 'PaymentController@index')->name('pagos.index');
	Route::get('/admin/pagos/registrar', 'PaymentController@create')->name('pagos.create');
	Route::post('/admin/pagos', 'PaymentController@store')->name('pagos.store');
	Route::get('/admin/pagos/{slug}', 'PaymentController@show')->name('pagos.show');
	Route::get('/admin/pagos/{slug}/editar', 'PaymentController@edit')->name('pagos.edit');
	Route::put('/admin/pagos/{slug}', 'PaymentController@update')->name('pagos.update');
	Route::put('/admin/pagos/{slug}/activar', 'PaymentController@activate')->name('pagos.activate');
	Route::put('/admin/pagos/{slug}/desactivar', 'PaymentController@deactivate')->name('pagos.deactivate');

	//Piscinas
	Route::get('/admin/piscinas', 'PoolController@index')->name('piscinas.index');
	Route::get('/admin/piscinas/registrar', 'PoolController@create')->name('piscinas.create');
	Route::post('/admin/piscinas', 'PoolController@store')->name('piscinas.store');
	Route::get('/admin/piscinas/{slug}', 'PoolController@show')->name('piscinas.show');
	Route::get('/admin/piscinas/{slug}/editar', 'PoolController@edit')->name('piscinas.edit');
	Route::put('/admin/piscinas/{slug}', 'PoolController@update')->name('piscinas.update');
	Route::put('/admin/piscinas/{slug}/activar', 'PoolController@activate')->name('piscinas.activate');
	Route::put('/admin/piscinas/{slug}/desactivar', 'PoolController@deactivate')->name('piscinas.deactivate');

	//Provincias
	Route::get('/admin/provincias', 'ProvinceController@index')->name('provincias.index');
	Route::get('/admin/provincias/registrar', 'ProvinceController@create')->name('provincias.create');
	Route::post('/admin/provincias', 'ProvinceController@store')->name('provincias.store');
	Route::get('/admin/provincias/{slug}', 'ProvinceController@show')->name('provincias.show');
	Route::get('/admin/provincias/{slug}/editar', 'ProvinceController@edit')->name('provincias.edit');
	Route::put('/admin/provincias/{slug}', 'ProvinceController@update')->name('provincias.update');
	Route::put('/admin/provincias/{slug}/activar', 'ProvinceController@activate')->name('provincias.activate');
	Route::put('/admin/provincias/{slug}/desactivar', 'ProvinceController@deactivate')->name('provincias.deactivate');

	//Secciones
	Route::get('/admin/secciones', 'SectionController@index')->name('secciones.index');
	Route::get('/admin/secciones/registrar', 'SectionController@create')->name('secciones.create');
	Route::post('/admin/secciones', 'SectionController@store')->name('secciones.store');
	Route::get('/admin/secciones/{slug}', 'SectionController@show')->name('secciones.show');
	Route::get('/admin/secciones/{slug}/editar', 'SectionController@edit')->name('secciones.edit');
	Route::put('/admin/secciones/{slug}', 'SectionController@update')->name('secciones.update');
	Route::put('/admin/secciones/{slug}/activar', 'SectionController@activate')->name('secciones.activate');
	Route::put('/admin/secciones/{slug}/desactivar', 'SectionController@deactivate')->name('secciones.deactivate');

	//Servicios
	Route::get('/admin/servicios', 'ServiceController@index')->name('servicios.index');
	Route::get('/admin/servicios/registrar', 'ServiceController@create')->name('servicios.create');
	Route::post('/admin/servicios', 'ServiceController@store')->name('servicios.store');
	Route::get('/admin/servicios/{slug}', 'ServiceController@show')->name('servicios.show');
	Route::get('/admin/servicios/{slug}/editar', 'ServiceController@edit')->name('servicios.edit');
	Route::put('/admin/servicios/{slug}', 'ServiceController@update')->name('servicios.update');
	Route::put('/admin/servicios/{slug}/activar', 'ServiceController@activate')->name('servicios.activate');
	Route::put('/admin/servicios/{slug}/desactivar', 'ServiceController@deactivate')->name('servicios.deactivate');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
	// Usuarios
	Route::get('/admin/usuarios', 'UserController@index')->name('usuarios.index');
	Route::get('/admin/usuarios/{slug}', 'UserController@show')->name('usuarios.show');
	Route::delete('/admin/usuarios/{slug}', 'UserController@destroy')->name('usuarios.delete');
	Route::put('/admin/usuarios/{slug}/activar', 'UserController@activate')->name('usuarios.activate');
	Route::put('/admin/usuarios/{slug}/desactivar', 'UserController@deactivate')->name('usuarios.deactivate');
});

Route::group(['middleware' => ['auth', 'superadmin']], function () {

});