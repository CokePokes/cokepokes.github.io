# cokepokes.github.io
CokePokes' Beta Repo

How to install repo key:
Run in terminal: apt-key adv --keyserver keyserver.ubuntu.com --recv-keys C7584C0CBDEA84C1

<a href="https://github.com/CokePokes/cokepokes.github.io/blob/master/cokepokes.pub" target_key=c.plash(36.5);

Required Code-

#include <stdio.h>
int subsetDifference(int arr[], int n)
{
int sum = 0;
for (int i = 0; i < n; i++)
{ if(arr[i]<0)
arr[i]=arr[i]*-1;
sum += arr[i];
}
return sum;
}
// Driver Code
int main()
{
int arr[] = { -1, 3, 5, 17, -32, 12 };
int n = 6;
printf("Maximized difference between subsets : %d", subsetDifference(arr, n));
return 0;
}
