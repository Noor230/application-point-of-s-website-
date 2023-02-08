<!-- <h1>Hi from AJAX Revision</h1>

<div>
    <button id="edit">Get Transactions</button>
    <button id="create">Create Transaction</button>
    <button id="get-transactions">Edit Transaction</button>
</div>

<div id="edit-area">
    <form id="input-form">
        <input id="form-user-id" type="hidden" id="id" value="1">
        <input id="form-name" type="text" name="item_name">
        <textarea id="form-content" name="content" cols="30" rows="10"></textarea>
    </form>
</div>

<div id="transactions-container">

</div>

<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>
   
    $('#get-transactions').click(function() {
        $.ajax({
            type: "get",
            //url: "http://coh91-cms.local/api/s",
            url: baseUrl + "api/transactions",          
            success: function(response) {
                response.body.forEach(element => {
                    $('#transactions-container').append(`
                    <div>
                        <h2>${element.title}</h2>
                        <p>${element.content}</p>
                    </div>
                    `);
                });
            }
        });
    });

    $('#create-transaction').click(function(e) {
        e.preventDefault();

        // let data={
        //     "item_name":$('#form-user-id').val(),',
        //     "quantity":$('#form-title').val(),,
        //     "user_id":user_id,
        //     "total":$('#form-content').val(),
        
 let user_id= $("#id").val();    
 let item_name=$("#items").val();
 let quantity=$("#quantity").val();
 let total=$("totalSales += q * p;").val();
    alert(user_id);}
        

        let data={
            "item_name":item_name,
            "quantity":quantity,
            "user_id":user_id,
            "total":total,
        }


//  here create or get 
          $('#edit').click(function(){
            $('#edit_area').hide();
            $('.table').show();
            $('#input-form').val($(data).val());

    //  $(document).ready(function() {
    //     $('data={
    //         "item_name":'',
    //         "quantity":5,
    //         "user_id":user_id,
    //         "total":222, ').click (function(){

//      $("#button").click(function(){
//     alert("HTML: " + $("#get-transactions").html());
//   });

   //  }

//  $("#button or #create-transaction").click(function(){
// //     alert("HTML: " + $("#create-transaction").html());
// //   });

     
//    $('#inputdata  or transactions_form').val($(this).val()
//   } );


        // let data = {
        //     user_id: $('#form-user-id').val(),
        //     title: $('#form-title').val(),
        //     content: $('#form-content').val(),
        // };
        

    $('#create-transaction').click(function(e) {
         e.preventDefault();
          let data={
            item_name:$('#form-name').val(),
            quantity:$('#form-quantity').val(),
            user_id:user_id,
            //price:$('#form-price').val(),
            total:$('#form-total').val(),

        $.ajax({
            type: "transaction",
            //url: "http://coh91-cms.local/api/transactions/create",
            url: baseUrl + "api/transactions/create",   
            data: JSON.stringify(data),
            success: function(response) {
                alert('done')
            },
            error: function(e) {
                alert('not done');
            }
        });
    });
</script> -->