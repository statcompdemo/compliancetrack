#----------print all elements in a list

def fun_print_list(list,indx=0):
    if(indx == len(list)):
        return 0
    print(len(list))
    print(list[indx])
    fun_print_list(list,indx+1)


list=["mango","banana","orange","Kiwi"]

fun_print_list(list)

#--------------sum of n natural number
# def sum_naturalno(n):
#     if(n==0):
#      return 0
#     return sum_naturalno(n-1)+n

# sum=sum_naturalno(5)
# print(sum)

#------------------factorial of a number
# def fact(n):
#     if(n==0 or n==1):
#         return 1
#     else:
#         return n*fact(n-1)
    
# print(fact(2))