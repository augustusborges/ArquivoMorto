alert('Welcome to Quiz Ninja');


const quiz = [
	["What's Superman's name?", "Clark Kent"],
	["What's Wonder Womam's real name?", "Diana Prince"],
	["What is Batman's real name?", "Bruce Wayne"]
];

let score = 0;

for(const [question,answer] of quiz){
	
	const response = prompt(question);
	
	if(response === answer){
		alert('Correct!');
		score++;
	} else {
		alert(`Wrong! The correct answer was ${answer}`);
	}
}
