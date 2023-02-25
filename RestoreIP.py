class Solution:
    def restoreIpAddresses(self, s: str):

        res =[]

        if len(s) > 12: 
            return res
        
        def backtack(i,dots,curIP):
            if dots == 4 and i == len(s):
                res.append(curIP[:-1])
                return
            if dots > 4:
                return
            l = len(s)
            for j in range(i, min(i +3, l)):
                curstr = int(s[i:j+1])
                if curstr < 256 and (i == j or s[i] != '0'):
                    backtack(j+1, dots + 1,curIP + s[i:j+1]+".")
        backtack(0,0,"")
        return res

sln = Solution()
print(sln.restoreIpAddresses('101023'))