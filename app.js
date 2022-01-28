const table = document.querySelector(".table_div");

// ALL MAIN BUTTON
const search = document.querySelector(".button .btn-primary");
const order = document.querySelector(".button .btn-success");
const graph = document.querySelector(".button .btn-danger");

// SEARCH FORM
const form = document.querySelector(".form_div");
const form_btn = document.querySelector(".form_div .btn-success");

// ORDER BUTTON
const order_buttons = document.querySelector(".order_button");
const order_asc = document.querySelector(".order_buttons .btn-success");
const order_table_asc = document.querySelector(".order_table");
const order_dsc = document.querySelector(".order_buttons .btn-danger");
const order_table_dsc = document.querySelector(".order_dsc");

// GRAPH

const graph_div = document.querySelector(".graph_div");


search.onclick = function(){
    if(form.style.display === "none"){
        form.style.display = 'block';
    }else{
        form.style.display = 'none'
    }
    form_btn.onclick = function(){
        table.style.display = 'block';
    }
    if(order_buttons.style.display = "block"){
        order_buttons.style.display = "none";
    }
    if(graph_div.style.display = "block"){
        graph_div.style.display = "none";
    }
}

order.onclick = function(){
   if(order_buttons.style.display === "none"){
     order_buttons.style.display = 'block';
   }else{
     order_buttons.style.display = 'none'
   }
   if(form.style.display = 'block'){
    form.style.display = 'none';
   }
   if(graph_div.style.display = "block"){
    graph_div.style.display = "none";
   }
}

graph.onclick = function(){
    if(graph_div.style.display === "none"){
        graph_div.style.display = 'block';
    }else{
        graph_div.style.display = 'none'
    }

    if(form.style.display = 'block'){
        form.style.display = 'none';
    }
    if(order_buttons.style.display = "block"){
        order_buttons.style.display = "none";
    }
}

order_asc.onclick = function(){
    order_table_asc.style.display = 'block';
}

order_dsc.onclick = function(){
    order_table_dsc.style.display = 'block';
}

