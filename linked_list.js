
class node {

    constructor(a){
        this.a = a;
        this.next = null;
    }
}

class linked_list {

    constructor(){
        this.head = null;
        this.tail = null;
        this.length = 0;
    }

    append(x){
        const n = new node(x);
        
        if(this.head == null){
            this.head = n;
        }else{

            let cur = this.head;

            while(cur.next){
                cur = cur.next;
            }

            cur.next = n;
            this.tail = n;
            this.length++;
        }
    }
}


const list = new linked_list();

for(let i =1; i < 4; i++){
    list.append(i);
}

console.log(list.head);

