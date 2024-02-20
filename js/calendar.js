const currentDate =document.querySelector(".current-date");
daysTag = document.querySelector(".days"),
prevNextIcon = document.querySelectorAll(".icons span");

	//const dateElement =document.getElementById("dateElement");
	//dateElement.addEventListener("click",function(){
		//const dateValue = dateElement.dataset.date;
		//const dateElement=document.clickFunction("clicked date");

	//});
	function handleClick(month, day) {
		alert('Clicked on' +month +'/' +day);
	}

let date= new Date (),
currYear =date.getFullYear(),
currMonth = date.getMonth();
//console.log(date,currMonth,currYear);

const months =["Janaury","February","March","April","May","June","July",
	          "August","September","October","November","December"];
const renderCalendar =() => {
	let firstDateofMonth = new Date(currYear, currMonth ,1).getDay(),
	 lastDateofMonth = new Date(currYear, currMonth +1, 0).getDate(),
	 lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth ).getDay(),
	 lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
     let liTag ="";

   for(let i= firstDateofMonth; i > 0; i--){
   	liTag += `<li class="inactive">${ lastDateofLastMonth - i + 1}</li>`;
   }

	for(let i= 1; i <= lastDateofMonth; i++){
		let isToday = i === date.getDate() && currMonth=== new Date().getMonth() 
		&& currYear === new Date().getFullYear() ? "active" :"";
		liTag += `<li class="${isToday}">${i}</li>`;

	}
	for (let i = lastDayofMonth; i< 6;i++)  {
		liTag += `<li class="inactive">${ i - lastDayofMonth +1}</li>`;
	}
	currentDate.innerText = `${months[currMonth]} ${currYear}`;
	daysTag.innerHTML = liTag;
}

renderCalendar();

prevNextIcon.forEach(icon => {
	icon.addEventListener("click",() =>{

	currMonth= icon.id === "prev" ? currMonth - 1: currMonth + 1;

	if(currMonth < 0 || currMonth > 11){
		date= new Date(currYear, currMonth);
		currYear = date.getFullYear();
		currMonth = date.getMonth();
	}else{
		date = new Date();
	}
	renderCalendar();	
	});


});