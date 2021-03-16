var hour = 18;

if (hour < 12) {
	console.log("Good morning. Would you like some toast?");
} else if (hour > 12 && hour < 17) {
	console.log("Good afternoon. Time for tea!");
} else {
	console.log("Good evening. How about noodles for dinner?");
}


//var count = 1;

//while (count < 11) {
//   console.log("count is " + count);
//  count++;
//}

//var count = 1;

//while (count < 101) {
//  console.log("count is " + count);
//count = count + 2;
//}


/*var str = "banana";
for (var i = 0; i < str.length; i++) {
 console.log(str[i]);
} */

var str = "Emma";
for (var i = 0; i < str.length; i++) {
	console.log(str[i]);
}


//These two for statements yield the same result
var str = "Java";
/*for (var i = 0; i < str.length; i++) {
 console.log(str[i]);
} */
for (var i in str) {
	console.log(str[i]);
}

//simpler line of code when your code does not need the index value of each character
for (var char of "WebDev") {
	console.log(char);
}

//code for buzzcoder
console.log('Hi, my name is Emma');

/*alert('Welcome to my Page!');

console.log(02);
console.log(3 + 17);
console.log(25 - 5);
console.log(25 / 5);
console.log(5 * 5); */

//var x;
//x = 10;
//console.log(x);

//var x = 10;
//console.log(x);

//function greetings(name) {
//    console.log("Hey " + name + " ,how's it going?");
//}

//greetings("Jennifer");



/*function greeting(age) {
	return "So I understand you're " + age + " years old."
}
console.log(
	greeting(27)
);

function fullGreeting(name, age) {
	return "Hi " + name + " , I believe you are " + age + " years old.";
}
console.log(fullGreeting("Jenny", 27));

function area(length, width) {
	return length * width;
}
console.log(area(10, 2));

var hello = function () {
	console.log('How are you?');
}
hello();
hello = "Something else";


function even(number) {
	if (number % 2 === 0) {
		return true;
	}
	else {
		return false;
	}
}
console.log(even(2));*/



function hello() {
	var blah = "It's early in the morning";
	console.log(blah);
}

hello();
var blah = "Please give me coffee";
console.log(blah);

/*setInterval(
	function () {
		document.write("Hello ");
	}, 3000
); */

/*function name() {
	var fname = prompt("Please enter your first name");
	var lname = prompt("Please enter your last name"); {
		document.write("Hello " + fname + " " + lname + ", how are you?");
	}
}

name();*/

//function isHighest(a, b, c) {
//	return Math.max(a, b, c);
//}

//isHighest();
//console.log(isHighest(20, 19, 30));



var pets = ["Rocky", "Bubbles", "Moxxi"];

var person = {
	name: "Emma",
	age: 28,
	city: "Buffalo",
	hobbies: "Cooking"
}

console.log(person.age);


function isHighest(...numbers) {
	var maxNumber;
	for (var i = 0; i < numbers.length; i++) {
		var currentNum = numbers[i];
		if (isNaN(currentNum)) {
			continue;
		}
		if (maxNumber === undefined) {
			maxNumber = parseInt(currentNum);
		}
	}
	return maxNumber;
}

var theStyles = {
	backgroundColor: "orange",
	fontSize: "48px",
	border: "4px solid green"
};

$("#burger").css(theStyles);

$("div").css("background", "blue");

$(".fun").css("fontSize", "48px");

$("#food").css("border", "green solid 8px");

$("div:first-of-type").css("color", "orange");