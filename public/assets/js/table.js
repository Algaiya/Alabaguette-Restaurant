/*----- SELECTION DE TABLE: CHANGEMENT DE BACKGROUND-COLOR -----*/ 
let table_number = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ]
table_number.forEach(index => {
    $(`#Table_${index}`).click(function(){
        this.style.backgroundColor = this.style.backgroundColor == 'green' ? '#4A70E3' : 'green';
    });  
});

/*-----------------------------------------
RÉCUPÉRATION DES INFORMATIONS SELECTIONNÉES  
------------------------------------------*/ 

    const table1 = document.getElementById('Table_1');
    table1.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id 
    });

    const table2 = document.getElementById('Table_2');
    table2.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table3 = document.getElementById('Table_3');
    table3.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table4 = document.getElementById('Table_4');
    table4.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table5 = document.getElementById('Table_5');
    table5.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table6 = document.getElementById('Table_6');
    table6.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table7 = document.getElementById('Table_7');
    table7.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table8 = document.getElementById('Table_8');
    table8.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table9 = document.getElementById('Table_9');
    table9.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table10 = document.getElementById('Table_10');
    table10.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table11 = document.getElementById('Table_11');
    table11.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table12 = document.getElementById('Table_12');
    table12.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table13 = document.getElementById('Table_13');
    table13.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });

    const table14 = document.getElementById('Table_14');
    table14.addEventListener("click", function() {
        // alert(this.textContent)
        document.getElementById('reservation_Num_table').value= this.id
    });
