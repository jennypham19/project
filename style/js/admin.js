function click(){
	var click = document.getElementsByClassName('info-admin')[0];
	click.style.display="block";
}
function tat(){
	var close = document.getElementsByClassName('info-admin')[0];
	close.style.display="none";
}
/* Menu*/
if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", ready);
} else {
	ready();
}
function ready(){
	var menuItem = document.getElementsByClassName("menu-items");
	for (var i = 0; i < menuItem.length; i++) {
		menuItem[i].addEventListener("click",function(e){
			console.log(e)
			e.target.classList.toggle("open-menu")
		}
		)	;
	}
}
function tatMenu(e){
	var tatmenu=document.getElementsByClassName('dropdown-menu')[0];
	tatmenu.style.display="none";
}

/*Blog*/
if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", ready1);
} else {
	ready1();
}
function ready1(){
	var blogItem = document.getElementsByClassName("blog-items");
	for (var i = 0; i < blogItem.length; i++) {
		blogItem[i].addEventListener("click",function(e){
			e.target.classList.toggle("open-blog")
		}
		);
	}
}
function tatBlog(e){
	var tatblog=document.getElementsByClassName('dropdown-blog')[0];
	tatblog.style.display="none";
}

/*Bill*/
if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", ready2);
} else {
	ready2();
}
function ready2(){
	var billItem = document.getElementsByClassName("bill-items");
	for (var i = 0; i < billItem.length; i++) {
		billItem[i].addEventListener("click",function(e){
			e.target.classList.toggle("open-bill")
		}
		);
	}
}
function tatBill(e){
	var tatbill=document.getElementsByClassName('dropdown-bill')[0];
	tatbill.style.display="none";
}
/*Staff*/
if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", ready3);
} else {
	ready3();
}
function ready3(){
	var staffItem = document.getElementsByClassName("staff-items");
	for (var i = 0; i < staffItem.length; i++) {
		staffItem[i].addEventListener("click",function(e){
			e.target.classList.toggle("open-staff")
		}
		);
	}
}
function tatStaff(e){
	var tatstaff=document.getElementsByClassName('dropdown-staff')[0];
	tatstaff.style.display="none";
}