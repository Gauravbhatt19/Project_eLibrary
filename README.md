# Project_eLibrary
Modular File Structure | eLibrary
Legends:
●       directory/
●       file.php

❏        Controllers/
	❏        auth/
		❏        registration.php
		❏        verifyRegistration.php
		❏        GmailRegistration.php
		❏        login.php
		❏        logout.php
		❏        checkAuthentication.php
	❏        users/
		❏        ListAllUsers.php
		❏        SendReport.php
	❏        books/
		❏        UserBooks.php
		❏        ListBooks.php
		❏        CategoryBooks.php
		❏        AddBook.php
		❏        EditBook.php
		❏        DeleteBook.php
		❏        ReadBook.php
	❏        bookCategories/
		❏        ListCategories.php
		❏        AddCategory.php
		❏        EditCategory.php
		❏        DeleteCategory.php
	❏        AutomatedLogics/
		❏        bookCompleted.php
		❏        nudgingInactiveReaders.php
	❏        common/
		❏        setUserSession.php
		❏        home.php
❏        Views/
	❏        users/   
		❏        listUsers_table.view.php   
		❏        login_form.view.php
		❏        registration_form.view.php
		❏        unVerifiedUser.view.php
	❏        books/
		❏        books_list.view.php
		❏        books_card.view.php
		❏        editBook_form.view.php
		❏        addBook_form.view.php
	❏      bookCategories/
		❏        listCategories_table.view.php
		❏        editCategory_form.view.php
		❏        filterCategory_form.view.php
		❏        addCategory_form.view.php
	❏        common/
		❏        header.view.php
		❏        footer.view.php
	❏      resources/
		❏        bootstrap/
			❏        bootstrap4_css.php
			❏        bootstrap4_js.php
		❏        database/
			❏        migrations/
		❏        js/
			❏        custom_JS_functions.js
		❏        gmail_login/
			❏        GoogleAPI/
		❏        PHPMailer/
		❏        uploads/
❏        core/
	❏        configs/
		❏        database/
			❏        config.php
		❏        GoogleAPI/
			❏        config.php
		❏        PHPMailer/
			❏        config.php
	❏        Model/
		❏        database/  
			❏        QueryBuilder.php
			❏        Connection.php
		❏        Book.php
		❏        User.php
		❏        Category.php
		❏        Mail.php
	❏        bootstrap.php
	❏        Request.php
	❏        Router.php
❏        .htaccess
❏        index.php
❏        routes.php
❏        .gitignore

This is the introductory project assigned to me for the web development internship by ColoredCow. 
This project is focused on steps involved while dealing with real world problems.
The basic cyclic steps involved in Software Development phases are as :
1. Documentation
  a. Problem Description (Detailed and Presized)
  b. Physical Topology
  c. Architecture Specification
  d. Modular File Structure
  e. Databases Schemas
2. Development
  a. Database Development
  b. Actual Coding

 
External Sources-

For problem description ->
https://docs.google.com/document/d/1OeNWKKUx3gUOSr0-32t4WDN_aok-eDfHzm0618eBuuI/edit?usp=sharing

For Physical Topology ->
https://docs.google.com/presentation/d/1xq9DzfEkWT1oXf8V4pMKOucN9qwNzPG29axb_u3Ai2M/edit?usp=sharing

For Architecture Specification ->
https://docs.google.com/presentation/d/1yf0QuMKHX7RwioYfK_fCsBkwWwwwoxzCbnHKDWsNqo4/edit?usp=sharing

For Modular File Structure ->
https://docs.google.com/document/d/19blzS00-6DcwEWzTMUK-HudGA_TlTq-esAULoZ5Fph8/edit?usp=sharing

For Databases Schemas ->
https://docs.google.com/presentation/d/17iSCTSeeP3FcZDFDQBVWUOUzzHwWxi_ZSSeh7f65gOM/edit?usp=sharing
