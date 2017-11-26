
/****************************************
  * Title : Problem Set 1: C *
  * Author: Md Milon Hossain *
*****************************************/
#include <stdio.h>
#include <cs50.h>

int main(void) {
    printf("minutes: ");
    int minutes = GetInt();
    
    printf("bottles: %i", minutes * 12);
}