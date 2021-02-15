class Canvas{
    constructor({id, WIDTH, HEIGHT, SPLIT}){
        if (id){
            this.canvas = document.getElementById(id);
        }
        else{
            this.canvas = document.createElement('canvas');
            document.querySelector('body').appendChild(this.canvas);
        }
        this.split = SPLIT;
        this.context = this.canvas.getContext('2d');
        this.canvas.width = WIDTH;
        this.canvas.height = HEIGHT;
        //Разбиваем игровое поле на клетки
        this.fieldW = this.canvas.width / this.split;
        this.fieldH = this.canvas.height / this.split;
    }

     //написание текста
    drawText(x, y, text, font = '15px bold Arial', color = '#000'){
        this.context.fillStyle = color;
        this.context.font = font;
        this.context.fillText(text, x, y);
    }

    //Рисуем змею
    drawSnake(snake){
        this.context.beginPath();
        for (let i = 0; i < snake.size; i++){
            this.context.rect(snake.coord[i].x * this.split, snake.coord[i].y * this.split, this.split, this.split);
        }
        this.context.closePath();
        this.context.strokeStyle = "#508C8C";
        this.context.fillStyle = "white";
        this.context.fill();
        this.context.stroke();
    }

    drawFruit(fruit){
        this.context.beginPath();
        this.context.rect(fruit.x * this.split, fruit.y * this.split, this.split, this.split);
        this.context.closePath();
        this.context.strokeStyle = "black";
        this.context.fillStyle = "black";
        this.context.fill();
        this.context.stroke();

    }
    clear(){
        this.context.fillStyle = '#508C8C';
        this.context.fillRect(0, 0, this.canvas.width, this.canvas.height);
    }
}