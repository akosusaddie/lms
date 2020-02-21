<?php 
$id = $_POST["id"];
$action = $_POST["act"];

/** New Application */
if($action == "add_application"){
    include("cls/add_application.blade.php");
}

  /** New Visit */
elseif($action == "add_new_visit"){
    include("cls/add_visit.blade.php");
}

/** View Visits */
elseif($action == "view_visit"){
    include("cls/view_visit.blade.php");
}

/** View Applications */
elseif($action == "view_application"){
    include("cls/view_application.blade.php");
}

/** New File */
elseif($action == "add_new_file"){
    include("cls/add_file.blade.php");
}

/** Dashboard */
elseif($action == "dashboard"){
    include("cls_dashboard.blade.php");
}

/** View Files */
elseif($action == "list_files"){
    include("cls/list_files.blade.php");
}

//  /** List Leases */
// elseif($action == "list_lease"){
//     include("cls/list_lease.php");
// }

/** Add System User */
elseif($action == "add_user"){
    include("cls/add_user.blade.php");
}

/** Profile Settings */
elseif($action == "profile_overview"){
    include("cls/profile_overview.blade.php");
}

/**  */
elseif($action == ""){
    include("cls/.php");
}

/**  */
elseif($action == ""){
    include("cls/.php");
}

/**  */
elseif($action == ""){
    include("cls/.php");
}

/**  */
elseif($action == "new_user"){
    include("process.blade.php");
}

/** New Application */
elseif($action == "add_new_application"){
    include("apply.blade.php");
}

/** Generate Valuation Report */
elseif($action == "generate_valReport"){
    include("cls/val_report.php");
}

/** Valuation */
elseif($action == "val_leasePrep"){
    include("cls/valuation.php");
}


elseif($action == "val_leaseExec"){
    include("cls/val_leaseExec.php");
}

elseif($action == "logout"){
    include("logout.php");
}
/** Process Visit */
elseif($action == "new_visit"){
    include("process_visit.php");
}

elseif($action == "list_users"){
    include("cls/list_users.php");
}

elseif($action == "rejected_application"){
    include("cls/app_pending.php");
}

/** Process Add User */
elseif($action == "user_sign_up"){
    include("cls/add_user.php");
}

elseif($action == "users_chat"){
    include("cls/users_chat.php");
}

elseif($action == "client_chat"){
    include("cls/client_chat.php");
}
elseif($action == "group_chat"){
    include("cls/group_chat.php");
}


/**  Book Appointment*/ 
elseif($action == "book_app"){
    include("cls/book_app.php");
}


/** Process Add User */
elseif($action == "new_user"){
    include("process.php");
}



/** Roles and Permissions */
elseif($action == "roles"){
    include("cls/roles.php");
}





?>

