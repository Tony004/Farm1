    //Увеличение или уменьшение количества голов на 1

    $('.plus').click(function(){
        let regNum = this.parentElement.parentElement.cells[0].innerHTML;
        let amount = this.parentElement.parentElement.cells[3].innerHTML;
        amount++;
        this.parentElement.parentElement.cells[3].innerHTML = amount;
        $("#message").load("Operations/change_amount.php","regNum="+regNum+"&amount="+amount);
    });
    $('.minus').click(function(){
        let regNum = this.parentElement.parentElement.cells[0].innerHTML;
        let amount = this.parentElement.parentElement.cells[3].innerHTML;
        if(amount > 1){
            amount--;
            this.parentElement.parentElement.cells[3].innerHTML = amount;
            $("#message").load("Operations/change_amount.php","regNum="+regNum+"&amount="+amount);
        }
        else alert("Количество не может быть меньше 1!");

    });
