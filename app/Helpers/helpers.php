<?php

function state($state) {
	if ($state==0) {
		return '<span class="badge badge-danger">Inactivo</span>';
	} elseif ($state==1) {
		return '<span class="badge badge-success">Activo</span>';
	} else {
		return '<span class="badge badge-dark">Desconocido</span>';
	}
}

function typeCompany($type) {
	if ($type==1) {
		return '<span class="badge badge-danger">Alarmas</span>';
	} elseif ($type==2) {
		return '<span class="badge badge-warning">Eléctrica</span>';
	} elseif ($type==3) {
		return '<span class="badge badge-primary">Agua</span>';
	} elseif ($type==4) {
		return '<span class="badge badge-success">Telefonía/Internet</span>';
	} else {
		return '<span class="badge badge-dark">Desconocido</span>';
	}
}


function typePay($type) {
	if ($type==1) {
		return '<span class="badge badge-danger">Transferencia</span>';
	} elseif ($type==4) {
		return '<span class="badge badge-warning">Bizum</span>';
	} elseif ($type==3) {
		return '<span class="badge badge-primary">PayPal</span>';
	} elseif ($type==2) {
		return '<span class="badge badge-success">Tarjeta Bancaria/Internet</span>';
	} else {
		return '<span class="badge badge-dark">Desconocido</span>';
	}
}

function statePay($state) {
	if ($state==0) {
		return '<span class="badge badge-danger">Rechazado</span>';
	} elseif ($state==2) {
		return '<span class="badge badge-warning">Pendiente</span>';
	} elseif ($state==1) {
		return '<span class="badge badge-primary">Aprobado</span>';
	} else {
		return '<span class="badge badge-dark">Desconocido</span>';
	}
}



function typeUser($type, $badge=1) {
	if ($badge==1) {
		if ($type==1) {
			return '<span class="badge badge-primary">Super Admin</span>';
		} elseif ($type==2) {
			return '<span class="badge badge-primary">Administrador</span>';
		} elseif ($type==3) {
			return '<span class="badge badge-primary">Usuario</span>';
		} else {
			return '<span class="badge badge-dark">Desconocido</span>';
		}
	} elseif ($badge==0) {
		if ($type==1) {
			return 'Super Admin';
		} elseif ($type==2) {
			return 'Administrador';
		} elseif ($type==3) {
			return 'Usuario';
		} else {
			return 'Desconocido';
		}
	}
}


function active($path, $group=null) {
	if (is_array($path)) {
		foreach ($path as $url) {
			if (is_null($group)) {
				if (request()->is($url)) {
					return 'active';
				}
			} else {
				if (is_int(strpos(request()->path(), $url))) {
					return 'active';
				}
			}
		}
		return '';
	} else {
		if (is_null($group)) {
			return request()->is($path) ? 'active' : '';
		} else {
			return is_int(strpos(request()->path(), $path)) ? 'active' : '';
		}
	}
}

function menu_expanded($path, $group=null) {
	if (is_array($path)) {
		foreach ($path as $url) {
			if (is_null($group)) {
				if (request()->is($url)) {
					return 'true';
				}
			} else {
				if (is_int(strpos(request()->path(), $url))) {
					return 'true';
				}
			}
		}
		return 'false';
	} else {
		if (is_null($group)) {
			return request()->is($path) ? 'true' : 'false';
		} else {
			return is_int(strpos(request()->path(), $path)) ? 'true' : 'false';
		}
	}
}

function submenu($path, $action=null) {
	if (is_array($path)) {
		foreach ($path as $url) {
			if (is_null($action)) {
				if (request()->is($url)) {
					return 'class=active';
				}
			} else {
				if (is_int(strpos(request()->path(), $url))) {
					return 'show';
				}
			}
		}
		return '';
	} else {
		if (is_null($action)) {
			return request()->is($path) ? 'class=active' : '';
		} else {
			return is_int(strpos(request()->path(), $path)) ? 'show' : '';
		}
	}
}

function selectArray($arrays, $selectedItems) {
	$selects="";
	foreach ($arrays as $array) {
		if (count($selectedItems)>0) {
			foreach ($selectedItems as $selected) {
				if (is_object($selected) && $selected->slug==$array->slug) {
					$select="selected";
					break;
				} elseif ($selected==$array->slug) {
					$select="selected";
					break;
				} else {
					$select="";
				}
			}
		}
		$selects.='<option value="'.$array->slug.'" '.$select.'>'.$array->name.'</option>';
	}
	return $selects;
}



function featured($featured) {
	if ($featured==1) {
		return '<span class="badge badge-primary">Si</span>';
	} elseif ($featured==0) {
		return '<span class="badge badge-danger">No</span>';
	} else {
		return '<span class="badge badge-dark">Desconocido</span>';
	}
}

