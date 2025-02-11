import * as fs from 'fs'

const input = fs.readFileSync('/dev/stdin', 'utf8')
// parseIntは、文字列を指定された基数の整数に変換する
const converted: number = parseInt(input, 2) // parseInt(111,2)なら7を返す

const degit1 = converted & 1
const degit2 = (converted & 2) >>> 1
const degit3 = (converted & 4) >>> 2
const answer = degit1 + degit2 + degit3
console.log(answer)

// & はビット論理積 両方のオペランドの対応するビットが1である位置のビットで返す
// 例) 5(101)と4(100)なら4(100)を返す。5(101)と2(010)なら0(000)を返す
// console.log(5 & 4) // 4
// console.log(5 & 2) // 0

// >>> は符号なし右ビットシフト 1つ目のオベランドを指定されたビット分右にシフト
// console.log(7 >>> 1) // 3
// console.log(5 >>> 2) // 1

