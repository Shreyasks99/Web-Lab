def solution(n):
    for i in range(1,n+1):
        if(i%2 == 0):
            print("-",end="")
        else:
            print("+",end="")

n = int(input())
solution(n)
