var name = "Carlos";

const changeName = () => {
  var name = "Juan";
  return name;
};

name = changeName();

console.log(name);
