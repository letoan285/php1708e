
// var a = 1;

// if (a > 2) {
// 	document.write('This number is greater than 2');
// } else {
// 	document.write('This number is less than 2')
// }

// var age = 15;

// if (age > 18) {
// 	document.write('Khong phai di tu');
// } else if (age > 16){
// 	document.write('Di tu 5 nam');
// }else if(age > 14){
// 	document.write('Di tu 20 nam');
// } else {
// 	document.write('Di tu mot gong');
// }
// var day = 100;
// switch (day){
// 	case 1:
// 		document.write('Hom nay la thu 2');
// 		break;
// 	case 2:
// 		document.write('Hom nay la thu 3');
// 		break;
// 	case 3:
// 		document.write('Hom nay la thu 4');
// 		break;
// 	case 4:
// 		document.write('Hom nay la thu 5');
// 		break;
// 	case 5:
// 		document.write('Hom nay la thu 6');
// 		break;
// 	case 6:
// 		document.write('Hom nay la thu 7');
// 		break;
// 	case 7:
// 		document.write('Hom nay la chu nhat');
// 		break;
// 	default:
// 		document.write('Nhap linh tinh, khong co thu nao ca');
// 		break;
// }

// var weight = parseFloat(prompt('Cân nặng của bạn là...'));
// var height = parseFloat(prompt('Chiều cao của bạn là...'));
// var bmi = weight/(height*height);
// document.write('chieu cao cua ban la; ' + height);
// document.write('Can nang cua ban la; ' + weight);
// document.write('chi so BMI cua ban la; ' + bmi);

// if (bmi > 30) {
// 	document.write('Ban bi beo phi');
// } else if(25 < bmi <30) {
// 	document.write('Hello Toan, Ban sap bi beo phi!');
// } else if(23 < bmi < 25){
// 	document.write('Ban hoi beo chut');
// } else if (18.5 < bmi < 23){
// 	document.write('Dang ban chuan roi ');
// } else {
// 	document.write('Ban gay tong teo');
// }
// var arr = ['Toan', 'Nam', 'Tung', 'Tuan', 'Trang'];
// for (var i = 0; i < arr.length; i++) {
// 	console.log('My name is ' + arr[i]);
// }
// var i = 0; //Gia tri khoi tao
// while(i < 10){
// 	console.log(i);
// 	i+=2; //Buoc lap
// }
//Method
// var myString = 'When bcd you say nothing at all';
// var myString2 = 'When I say nothing at all...';



// document.write(myString.toUpperCase());
// document.write('<br>');
// document.write(myString.toLowerCase());
// var arr = [3,4,5,6,7,8];
// console.log(myString.indexOf('y'));
// console.log(myString.repeat(3));
// document.write(myString.split(' '));
// document.write(myString.concat(myString2));
// console.log(myString.charCodeAt(5));
// console.log(myString.charCodeAt(6));
// console.log(myString.charCodeAt(7));

// var d = new Date();
// document.write(d);
// document.write(d.getDay());
// document.write(d.getDate());
// document.write('Nam nay la nam ' + d.getFullYear());
// document.write(d.getTime());

// var arr = ['Toan', 'Nam', 'Tung', 'Tuan', 'Trang'];
// document.write(arr.pop());
// arr.shift();
// arr.unshift('BEO');

// document.write(arr);

// setInterval(function(){
// 	console.log('Hello Vietnam');
// }, 2000);

function Add(a = 9, b = 8) {
	return a + b;
}

console.log(Add(5, 4));