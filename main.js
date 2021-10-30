

img = new Array("picture/amane.jpg", "picture/erichan.jpg", "picture/fujioka.jpg", "picture/fujita.jpg", "picture/genki.jpg", "picture/ginga.jpg", "picture/kamikochi.jpg", "picture/kiyotani.jpg", "picture/kurioka.jpg", "picture/mayu.jpg", "picture/shohei.jpg", "picture/tota.jpg", "picture/umidu.jpg", "picture/yamada.jpg", "picture/yokoyama.jpg", "picture/yusuke.jpg"); //*1
count = -1;
imgTimer();

function imgTimer() {
	//画像番号
	count++; //*3
	//画像の枚数確認
	if (count === img.length) count = 0; //*4
	//画像出力
	document.everyone.src = img[count]; //*5
	//次のタイマー呼びだし
	setTimeout("imgTimer()", 1000); //*6
}



