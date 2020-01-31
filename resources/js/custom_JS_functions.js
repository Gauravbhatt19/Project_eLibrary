function passwordMatch(){
  var pass=document.getElementById('rpassword').value;
  var confirmPass=document.getElementById('password1').value;
  if(pass===confirmPass){
    return true;
  }
  else{
   document.getElementById('error').innerHTML="<div class='mt-2 alert alert-warning alert-dismissible fade show' role='alert'>  <strong>Try Again!</strong> Confirm Password doesn\'t matches with password .!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
   document.getElementById('rpassword').focus();
   return false;
 }
}
function logout(){
  var test= window.confirm("Are you sure, You want Logout !");
  if(test == true){
    var url='/logout';
    window.location=url;
  }
}
function del($id,$lnk){
  var test= window.confirm("Are you sure, You want Delete !");
  if(test == true){
    var url=$lnk+$id;
    window.location=url;
  }
}
$('#editCategoryModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var category_name = button.data('cname') 
   var cid = button.data('cid') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #category_name').val(category_name)
  modal.find('.modal-body #cid').val(cid)
})
$('#editBookModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var book_name = button.data('bookname') 
   var bid = button.data('bid') // Extract info from data-* attribute
   var author_name = button.data('authorname') 
   var edition = button.data('edition') // Extract info from data-* attribute
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #book_name').val(book_name)
  modal.find('.modal-body #bid').val(bid)
  modal.find('.modal-body #author_name').val(author_name)
  modal.find('.modal-body #edition').val(edition)
})