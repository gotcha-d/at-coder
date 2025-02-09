import * as fs from 'fs';

const main = (input: string) => {

  const lines: string[] = input.split(/\n/)
  const sum = Number(lines[0]) + Number(lines[1].split(/\s/)[0]) + Number(lines[1].split(/\s/)[1])
  console.log(sum, lines[2])
}

const input = fs.readFileSync("/dev/stdin", "utf8")
main(input)