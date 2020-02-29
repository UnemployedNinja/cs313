const name = "Max"; 
let age = 29;                   // let and var can be used 
const hasHobbies = true;

age = 30; 

function summarizeUser(userName, userAge, userHasHobby) {

    return ('Name is ' + userName + ", age is " + userAge + 
        ' and the user has hobbies: ' + userHasHobby);

}

const add = (a,b) => {
    return a + b;
}

const addOne = a => a + 1;

console.log(summarizeUser(name, age, hasHobbies));
console.log(summarizeUser('Shawn', 25, true));
console.log(add(1,2));
console.log(addOne(1))