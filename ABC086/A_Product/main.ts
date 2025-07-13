import * as fs from 'fs'

function main(input: string): void {
  const numStrings: string[] = input.split(/\s/)
  const a = Number(numStrings[0])
  const b = Number(numStrings[1])

  const result = (a * b % 2 == 0) ? "Even" : "Odd"
  console.log(result)
}

// const input = fs.readFileSync("/dev/stdin", "utf8")
// main(input)

// 数値のおまけ↓↓
// parseIntは文字列のうち数値を判別する
console.log(parseInt("1.1")) // 1
console.log(parseInt("16px")) // 16

// Numberは文字列全体を評価して数値に変換する。数値に変換できない場合はNaNを返す
console.log(Number("1.1")) // 1.1
console.log(Number("16px")) // NaN