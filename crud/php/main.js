
$("input[name=book_id]").prop('readonly', true);

function on(id, name, publisher, price) {
    console.log("Clicked", id, name, publisher, price);
    $("input[name=book_id]").val(id);
    $("input[name=book_name]").val(name);
    $("input[name=book_publisher]").val(publisher);
    $("input[name=book_price]").val(price);
}

$("#btn_read").click( () => {
    console.log("click button");
});
