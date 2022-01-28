const solution_btn = document.querySelector(".solution_btn button");
const quiz_box = document.querySelector(".quiz_box");
const option_list = document.querySelector(".option_list");
const next_btn = document.querySelector("footer .next_btn");
const sol_btn = document.querySelector("footer .sol_btn");
const prev_btn = document.querySelector("footer .prev");
const sol_box = document.querySelector(".sol_box");
const que_ans = document.querySelector(".answer");
const des = document.getElementById("myel");
const ltitle = document.getElementById("read");
const link = document.getElementById("l");
const back = document.querySelector(".back");

let que_count = 0;
let que_numb = 1;
let index = 0;

solution_btn.onclick = () =>{
    quiz_box.classList.add("activeQuiz");
    showQuetions(0);
    let correcAns = questions[0].answer;
    const allOptions = option_list.children.length;
    for(i=0; i < allOptions; i++){
        if(option_list.children[i].textContent == correcAns){
            option_list.children[i].setAttribute("class", "option correct"); 
            option_list.children[i].insertAdjacentHTML("beforeend",tickIconTag); 
        } 
    }
    
}

function showQuetions(index){
    const que_text = document.querySelector(".que_text");

    let que_tag = '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
    let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[3] +'</span></div>';
    que_text.innerHTML = que_tag; 
    option_list.innerHTML = option_tag; 
    
}

let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';

next_btn.classList.add("show");
sol_btn.classList.add("show");
prev_btn.classList.add("show");


sol_btn.onclick = () =>{
    sol_box.classList.add("activeSol");
    que_ans.textContent =solutions[index].ans;
    des.textContent = solutions[index].description;
    ltitle.textContent = solutions[index].title;
    link.textContent = solutions[index].link;
    
}

prev_btn.onclick = () =>{
    sol_box.classList.remove("activeSol");
    if(que_count<questions.length){
        que_count--;
        que_numb--;
        index--;
        showQuetions(que_count);
        showans();
    }
}


next_btn.onclick = () =>{
    sol_box.classList.remove("activeSol");
    if(que_count<questions.length - 1){
        que_count++;
        que_numb++;
        index++;
        showQuetions(que_count);
        showans();
    }
}

back.onclick = () =>{
    sol_box.classList.remove("activeSol");
}

function showans(){ 
    let correcAns = questions[que_count].answer;
    const allOptions = option_list.children.length;
    for(i=0; i < allOptions; i++){
        if(option_list.children[i].textContent == correcAns){
            option_list.children[i].setAttribute("class", "option correct"); 
            option_list.children[i].insertAdjacentHTML("beforeend",tickIconTag); 
        } 
    }
}

function hrefl(){
    window.open(solutions[index].link,"_blank");
    // window.location.href = solutions[index].link;
}

