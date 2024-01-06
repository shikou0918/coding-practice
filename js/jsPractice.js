// let num = Math.round(Math.random() * 5);
// console.log("現在の値：" + num);
// switch (num) {
//   case 1:
//     console.log("大吉です！");
//     break;
//   default:
//     console.log("これが表示されたら破滅です");
//     break;
// }

let num = 4;
let rand = Math.round(Math.random() * 10);
console.log("ループ開始");
while(rand !== num) {
  console.log("rand値: " + rand);
  rand = Math.round(Math.random() * 10);
}
console.log("ループ終了");
