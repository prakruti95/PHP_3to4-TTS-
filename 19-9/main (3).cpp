#include <iostream>
#include <cstring>
using namespace std;

int main()
{
   char ch[50]="hello";
   char ch2[50];
   
   
   strcpy(ch2,ch);
   cout<<ch2<<endl;
    
  
    return 0;
}