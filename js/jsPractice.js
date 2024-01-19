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

// let num = 4;
// let rand = Math.round(Math.random() * 10);
// console.log("ループ開始");
// while(rand !== num) {
//   console.log("rand値: " + rand);
//   rand = Math.round(Math.random() * 10);
// }
// console.log("ループ終了");

// let ans = 0;
// let i = 1;
// while(i <= 100) {
//   ans += i;
//   i++;
// }

// console.log("答え: " + ans);
// console.log("ループ終了のi: " + i);

// let ans = 0;
// for (let i = 1; i <= 100; i++) {
//   ans += i;
// }
// console.log("答え: " + ans);
// console.log("ループ終了のi: " + i);

// let ans = 0;
// let i = 1;
// do {
//   ans += i;
//   i++;
// } while(i <= 100);
// console.log("答え: " + ans);
// console.log("ループ終了のi: " + i);

console.log("外のループ開始");
for(let i = 1; i <=3; i++) {
  console.log("内のループ開始");
  for(let j = 1; j <= 3; j++) {
    console.log("i:j=" + i + ":" + j);
  }
  console.log("内のループ終了")
}
console.log("外のループ終了")

// test
