package main

import (
    "fmt"
)

func isSortedAfterSwaps(N int, A []int, Q int, swaps [][2]int) {
    // 指定された回数の入れ替えを実行
    for _, swap := range swaps {
        L, R := swap[0]-1, swap[1]-1 // 配列のインデックスは 0 始まり
        A[L], A[R] = A[R], A[L]
    }
    
    // 配列が昇順かどうかをチェック
    for i := 1; i < N; i++ {
        if A[i-1] > A[i] {
            fmt.Println("No")
            return
        }
    }
    fmt.Println("Yes")
}

func main() {
    var N, Q int
    fmt.Scan(&N)
    
    A := make([]int, N)
    for i := 0; i < N; i++ {
        fmt.Scan(&A[i])
    }
    
    fmt.Scan(&Q)
    swaps := make([][2]int, Q)
    for i := 0; i < Q; i++ {
        fmt.Scan(&swaps[i][0], &swaps[i][1])
    }
    
    isSortedAfterSwaps(N, A, Q, swaps)
}