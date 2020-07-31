var name = "Carlos";

const changeName = () => {
  var name = "Juan";
  return name;
};

name = changeName();

console.log(name);

let arr = [1, 2, 4, 5, 5];

let lastItem = arr.pop();
console.log(lastItem);
