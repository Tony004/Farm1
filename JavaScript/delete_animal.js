//Удаление строки

$('.del').click(function(){
    let result = confirm("Строка будет удалена!");
    if(result){
        let regNum = this.parentElement.parentElement.cells[0].innerHTML;
        let name = this.parentElement.parentElement.cells[1].innerHTML;
        $("#message").load("Operations/delete_animal.php","regNum="+regNum);
    }
});
