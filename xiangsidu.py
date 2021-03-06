# 比较两张图片的相似度
from PIL import Image
from functools import reduce
import time
import sys

# 计算Hash
def phash(img):
	img = img.resize((8, 8), Image.ANTIALIAS).convert('L')
	avg = reduce(lambda x, y: x + y, img.getdata()) / 64.
	return reduce(
		lambda x, y: x | (y[1] << y[0]),
		enumerate(map(lambda i: 0 if i < avg else 1, img.getdata())),
		0
	)


# 计算汉明距离
def hamming_distance(a, b):
	return bin(a ^ b).count('1')


# 计算图片相似度
def is_imgs_similar(img1, img2):
	return  hamming_distance(phash(img1), phash(img2)) 


if __name__ == '__main__':
	img1_path = sys.argv[1]
	img2_path = sys.argv[2]
	
	img1 = Image.open(img1_path)
	img2 = Image.open(img2_path)
	
	a = is_imgs_similar(img1, img2)
	print(a)