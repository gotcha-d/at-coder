import * as fs from 'fs'

const PLACE_NUMBER = '1'

function main(input: string): void {
  const chars = input.split('')
  let count: number = 0
  for(let i: number = 0; i < chars.length; i++) {
    if (chars[i] === PLACE_NUMBER) {
      count++
    }
  }
  console.log(count)
}

const input = fs.readFileSync('/dev/stdin', 'utf8')
main(input)