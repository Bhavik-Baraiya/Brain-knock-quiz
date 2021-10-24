var sc=0;
var dsc=0;
var p=0;
var ul=document.getElementById('ul');
var btn=document.getElementById('button');
var scoreCard=document.getElementById('scoreCard');
var quizBox=document.getElementById('questionBox');
var go=document.getElementById('gameoverbox');
var op1=document.getElementById('op1');
var op2=document.getElementById('op2');
var op3=document.getElementById('op3');
var op4=document.getElementById('op4'); 
go.style.display="none";
function doSomething() {
  go.style.display='block';
  quizBox.style.display="none";
  op1.style.display="none";
  op2.style.display="none";
  op3.style.display="none";
  op4.style.display="none";
  btn.style.display="none";
}

var timeLeft = 30;
var elem = document.getElementById('some_div');
var timerId = setInterval(countdown, 1000);
function countdown() {
    if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
    } else {
        elem.innerHTML = timeLeft ;
        timeLeft--;
    }
}
	var app={
				questions:[

							{q:'HTML Stands for?',options:['Hyper Text Markup Language','High Text Markup Language','Hyper Tabular Markup Language','None of these'],answer:1},
							{q:'Which of the following tag is used to mark a begining of paragraph ?',options:['td','br','p','tr'],answer:3},
							{q:'Correct HTML tag for the largest heading is ?',options:['h4','h1','h8','h9'],answer:2},
							],
				index:0,
				load:function(){
          			if (this.index<=this.questions.length-1 || this.timeLeft==-1) {
						quizBox.innerHTML=this.index+1+". "+this.questions[this.index].q;
						op1.innerHTML=this.questions[this.index].options[0];
						op2.innerHTML=this.questions[this.index].options[1];
						op3.innerHTML=this.questions[this.index].options[2];
						op4.innerHTML=this.questions[this.index].options[3];
					}
					else{
						clearTimeout(timerId);
						go.style.display='block';
						quizBox.style.display="none";
						op1.style.display="none";
						op2.style.display="none";
						op3.style.display="none";
						op4.style.display="none";
						btn.style.display="none";
					}
				},
				next:function(){
					this.index++;
					this.load();
					timeLeft=30;
				},
				check:function(ele){
					var id=ele.id.split('');

					if(id[id.length-1]==this.questions[this.index].answer){
						this.score++;
						this.point+=10;
						ele.className="correct";
						ele.innerHTML="Correct";
						this.scoreCard();
						this.pointCard();
						
					}
					else{
						this.dscore++;
						this.point-=10;
						ele.className="wrong";
						ele.innerHTML="Wrong";
						this.dscoreCard();
						this.pointCard();
					}
				},
				notClickAble:function(){
					for(let i=0;i<ul.children.length;i++){
						ul.children[i].style.pointerEvents="none";
					}
				},
				clickAble:function(){
					for(let i=0;i<ul.children.length;i++){
						ul.children[i].style.pointerEvents="auto";
						ul.children[i].className='';
					}
				},
				score:0,
				dscore:0,
				point:0,
				scoreCard:function(){
					scoreCard.innerHTML=this.score;
					sc=this.score;
					alert(sc);
				},
				dscoreCard:function(){
					dscoreCard.innerHTML=this.dscore;
					dsc=this.dscore;
					alert(dsc);
				},
				pointCard:function(){
					pointCard.innerHTML=this.point;
					p=this.point;
					alert(p);
				}
			}
			window.onload=app.load();

			function button(ele){
				app.check(ele);
				app.notClickAble();
			}

			function  next(){
				app.next();
				app.clickAble();
			}
			
			