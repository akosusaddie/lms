<?php 
$id = $_POST["id"];
$action = $_POST["act"];

/** New Application */
if($action == "form_13"){
    include("lc/form_13.php");
}

  /** New Visit */
elseif($action == "add_new_visit"){
    include("lc/add_visit.php");
}

/** View Visits */
elseif($action == "view_visit"){
    include("lc/view_visit.php");
}

/** View Applications */
elseif($action == "view_application"){
    include("lc/view_application.php");
}

/** New File */
elseif($action == "add_new_file"){
    include("lc/add_file.php");
}

/** Dashboard */
elseif($action == "dashboard"){
    include("lc_dashboard.php");
}

/** View Files */
elseif($action == "list_files"){
    include("lc/list_files.php");
}

//  /** List Leases */
// elseif($action == "list_lease"){
//     include("lc/list_lease.php");
// }

/** Add System User */
elseif($action == "add_user"){
    include("lc/add_user.php");
}

/** Profile Settings */
elseif($action == "profile_overview"){
    include("lc/profile_overview.php");
}

/**  */
elseif($action == ""){
    include("lc/.php");
}

/**  */
elseif($action == ""){
    include("lc/.php");
}

/**  */
elseif($action == ""){
    include("lc/.php");
}

/**  */
elseif($action == "new_user"){
    include("process.php");
}

/** New Application */
elseif($action == "add_new_application"){
    include("apply.php");
}

/** Generate Valuation Report */
elseif($action == "generate_valReport"){
    include("lc/val_report.php");
}

/** Valuation */
elseif($action == "val_leasePrep"){
    include("lc/valuation.php");
}


elseif($action == "val_leaseExec"){
    include("lc/val_leaseExec.php");
}

elseif($action == "logout"){
    include("logout.php");
}
/** Process Visit */
elseif($action == "new_visit"){
    include("process_visit.php");
}

elseif($action == "list_users"){
    include("lc/list_users.php");
}

elseif($action == "rejected_application"){
    include("lc/app_pending.php");
}

/** Process Add User */
elseif($action == "user_sign_up"){
    include("lc/add_user.php");
}

elseif($action == "users_chat"){
    include("lc/users_chat.php");
}

elseif($action == "client_chat"){
    include("lc/client_chat.php");
}
elseif($action == "group_chat"){
    include("lc/group_chat.php");
}


/**  Book Appointment*/ 
elseif($action == "book_app"){
    include("lc/book_app.php");
}


/** Process Add User */
elseif($action == "new_user"){
    include("process.php");
}



/** Roles and Permissions */
elseif($action == "roles"){
    include("lc/roles.php");
}





?>

