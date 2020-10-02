#include<stdio.h>
#include <malloc.h>

struct data * insert(struct data *,int); /* cannot be used to insert element at beginning or end */
struct data * delete(struct data *,int); /* cannot be used to delete element from beginning or end */
struct data * display(struct data *);

struct data{
    int roll_no;
    char fname[10];
    char lname[10];
    int dob;
    unsigned long int ph_no;
    struct data * next;
};

int main(){
    struct data * start=NULL;
    struct data * node = (struct data *)malloc(sizeof(struct data));
    int n;
    printf("How many students are there? : ");
    scanf("%d",&n);
    start= node;
    struct data * ptr=start;
    for(int i=0;i<n;i++){
        printf("Enter roll no, first name, last name, dob(ddmmyyyy) and phone number : \n");
        scanf("%d %s %s %d %lu",&ptr->roll_no, ptr->fname, ptr->lname, &ptr->dob, &ptr->ph_no);
        if(i<n-1){
            struct data * node=(struct data *)malloc(sizeof(struct data));
            ptr->next=node;
            ptr=ptr->next;
        }
        else{
        ptr->next=NULL;
        }
    }
    while(1){
        int ch;
        printf("Choose an operation:\n1.Add student\n2.Delete student\n");
        printf("3.Display\n0.Exit\nEnter your choice : ");
        scanf("%d",&ch);
        if(ch==0){
            break;
        }
        int roll;
        switch(ch){
            case 1:
                printf("Enter roll no after which you want to insert : ");
                scanf("%d",&roll);
                insert(start, roll);
                break;
            case 2:
                printf("Enter roll no to delete : ");
                scanf("%d",&roll);
                delete(start, roll);
                break;
            case 3:
                display(start);
        }
    }
    return 0;
}

struct data * insert(struct data * start, int roll_no){
    struct data * ptr=start;
    while (ptr->roll_no!=roll_no){
        ptr=ptr->next;
    }
    struct data * node=(struct data *)malloc(sizeof(struct data));
    printf("Enter roll no, first name, last name, dob(ddmmyyyy) and phone number : \n");
    scanf("%d %s %s %d %lu",&node->roll_no, node->fname, node->lname, &node->dob, &node->ph_no);
    node->next=ptr->next;
    ptr->next=node;
}

struct data * delete(struct data * start, int roll_no){
    struct data * ptr=start;
    struct data * preptr=ptr;
    while (ptr->roll_no!=roll_no){
        preptr=ptr;
        ptr=ptr->next;
    }
    struct data * temp=ptr;
    preptr->next=temp->next;
    free(temp);
}

struct data * display(struct data * start){
    struct data * ptr=start;
    printf("roll no  first name  last name  dob  phone no\n");
    while(ptr!=NULL){
        printf("  %d   ",ptr->roll_no);
        printf("%s   ",ptr->fname);
        printf("%s   ",ptr->lname);
        printf("%d   ",ptr->dob);
        printf("%lu   ",ptr->ph_no);
        printf("\n");
        ptr=ptr->next;
    }
}



























