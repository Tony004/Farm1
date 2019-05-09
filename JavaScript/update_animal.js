//Редактирование строки

$(".redact").click(function(){
    let regNum = this.parentElement.parentElement.cells[0].innerHTML;
    window.location.replace("Operations/update_animal_form.php?regNum="+regNum);
})
