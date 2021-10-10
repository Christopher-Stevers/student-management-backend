let subjects=0;
const form=document.querySelector("form");
function addBtn(e){
    e.preventDefault();
    e.stopPropagation();
   const newInput= document.createElement("input");
   newInput.name=`subjects[item${subjects.toString()}]`;
   subjects+=1;
   form.appendChild(newInput);

}
document.getElementById("addSubjectBtn").addEventListener('click', addBtn);